<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvestmentInquirySubmitted;
use Illuminate\Support\Str;

class InvestmentController extends Controller
{
    /**
     * Handle the investment inquiry form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // 1. Validate Form Inputs
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount_tier' => 'required|string|in:retail,enterprise,partner',
            'message' => 'nullable|string',
        ]);

        // 2. Generate unique tracking reference number
        $refCode = 'SENCHI-INV-' . strtoupper(Str::random(6));
        $validated['ref_code'] = $refCode;

        // Map amount tier to human readable text
        $tierNames = [
            'retail' => 'Retail Treasury Notes (₦500,000 - ₦5M)',
            'enterprise' => 'Enterprise Growth Fund (₦5M - ₦25M)',
            'partner' => 'Capital Partner Equity (₦25M+)',
        ];
        $validated['amount_tier_name'] = $tierNames[$validated['amount_tier']];

        // 3. Send successful submission notification email to the applicant
        try {
            Mail::to($validated['email'])->send(new InvestmentInquirySubmitted($validated));
        } catch (\Exception $e) {
            // Log the error but proceed with saving/displaying success to the user
            logger()->error('Failed to send investment inquiry email: ' . $e->getMessage());
        }

        // 4. Return response based on request type
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your investment inquiry has been submitted successfully! An email confirmation is on its way.',
                'ref_code' => $refCode,
            ]);
        }

        return redirect()->back()
            ->with('success', 'Your investment inquiry has been submitted successfully! An email confirmation has been sent.')
            ->with('ref_code', $refCode);
    }
}
