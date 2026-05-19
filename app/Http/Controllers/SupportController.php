<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportInquirySubmitted;
use Illuminate\Support\Str;

class SupportController extends Controller
{
    /**
     * Handle the support inquiry form submission.
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
            'topic' => 'required|string|in:savings,loan,agent,complaints',
            'message' => 'required|string',
        ]);

        // 2. Generate unique tracking reference number
        $refCode = 'SENCHI-SUP-' . strtoupper(Str::random(6));
        $validated['ref_code'] = $refCode;

        // Map topic to human readable text
        $topicNames = [
            'savings' => 'High-Yield Savings Plans',
            'loan' => 'Micro Loan Inquiry',
            'agent' => 'Become Agent Banker',
            'complaints' => 'Customer Support / General Complaints',
        ];
        $validated['topic_name'] = $topicNames[$validated['topic']];

        // 3. Send successful submission notification email to Support Team with Copy
        try {
            Mail::to('customercare@senchimfb.com.ng')
                ->cc('sundayibrahim@senchimfb.com.ng')
                ->send(new SupportInquirySubmitted($validated));
        } catch (\Exception $e) {
            // Log the error but proceed with saving/displaying success to the user
            logger()->error('Failed to send support inquiry email: ' . $e->getMessage());
        }

        // 4. Return response based on request type
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting Senchi MFB! Our team has received your message and will reach out to you within 15 minutes.',
                'ref_code' => $refCode,
            ]);
        }

        return redirect()->back()
            ->with('success', 'Thank you for contacting Senchi MFB! Our team has received your message and will reach out to you within 15 minutes.')
            ->with('ref_code', $refCode);
    }
}
