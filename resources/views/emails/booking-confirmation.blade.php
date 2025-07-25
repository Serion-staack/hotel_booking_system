<img src="https://i.imgur.com/abc123.png" alt="Hotel Lux Logo"
     style="display:block; margin:20px auto 0; max-height:60px;">

<div style="max-width:600px; margin:40px auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#2c3e50; background:#ffffff; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.1); overflow:hidden;">

    <div style="background:linear-gradient(90deg, #1e3c72, #2a5298); padding:28px; text-align:center; color:#fff;">
        <h1 style="margin:0; font-size:26px;">Booking Confirmation</h1>
        <p style="margin:6px 0 0; font-size:16px;">Thank you for choosing Hotel Lux</p>
    </div>

    <!-- Body -->
    <div style="padding:32px;">
        <p style="font-size:17px;">Dear <strong>{{ $booking->customer_name }}</strong>,</p>

        <p style="font-size:16px; line-height:1.6; margin-top:12px;">
            We are pleased to confirm your reservation. Below are the details of your booking:
        </p>

        <table style="width:100%; border-collapse:collapse; margin:24px 0;">
            <tr>
                <td style="padding:14px; border:1px solid #eaeaea; font-weight:bold; background:#f4f6f8;">Booking ID</td>
                <td style="padding:14px; border:1px solid #eaeaea;">#{{ $booking->id }}</td>
            </tr>
            <tr>
                <td style="padding:14px; border:1px solid #eaeaea; font-weight:bold; background:#f4f6f8;">Room Number</td>
                <td style="padding:14px; border:1px solid #eaeaea;">{{ $booking->room->room_number ?? $booking->room_id }}</td>
            </tr>
            <tr>
                <td style="padding:14px; border:1px solid #eaeaea; font-weight:bold; background:#f4f6f8;">Start Date</td>
                <td style="padding:14px; border:1px solid #eaeaea;">
                    {{ \Carbon\Carbon::parse($booking->start_date)->format('l, F j, Y') }}
                </td>
            </tr>
            <tr>
                <td style="padding:14px; border:1px solid #eaeaea; font-weight:bold; background:#f4f6f8;">End Date</td>
                <td style="padding:14px; border:1px solid #eaeaea;">
                    {{ \Carbon\Carbon::parse($booking->end_date)->format('l, F j, Y') }}
                </td>
            </tr>
        </table>

        <!-- CTA -->
        <div style="text-align:center; margin:30px 0;">
            <a href="{{ route('show.bookings', $booking->id) }}"
               style="background:#1e3c72; color:#fff; padding:14px 28px; border-radius:8px; text-decoration:none; font-size:16px; font-weight:bold;">
                View Your Booking
            </a>
        </div>

        <p style="font-size:16px; line-height:1.6;">
            For any questions or special requests, please feel free to contact us at:
        </p>

        <p style="font-size:16px; margin-top:6px;">
            <strong>Email:</strong> <a href="mailto:reception@hotellux.com">reception@hotellux.com</a><br>
            <strong>Phone:</strong> +355 69 123 4567
        </p>

        <p style="margin-top:32px;">
            Warm regards,<br>
            <strong>Hotel Lux Team</strong>
        </p>
    </div>

    <!-- Footer -->
    <div style="background:#f8f9fa; text-align:center; padding:18px; font-size:13px; color:#888;">
        &copy; {{ date('Y') }} Hotel Royal, Durres. All rights reserved.
    </div>
</div>



