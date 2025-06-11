<!-- resources/views/make_payment.blade.php -->

@extends('master.layout')

@section('content')
<style>
    .payment-container {
        max-width: 900px;
        margin: auto;
        background: #fffbe6;
        padding: 2rem;
        border-radius: 10px;
        font-family: Arial, sans-serif;
    }
    .section {
        margin-bottom: 1.5rem;
    }
    .summary-box, .billing-box, .method-box {
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1rem;
    }
    .summary-header {
        font-weight: bold;
        margin-bottom: 0.5rem;
    }
    .highlight {
        color: red;
        font-weight: bold;
    }
    .proceed-btn {
        background-color: #32CD32;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
    }
    .proceed-btn:hover {
        background-color: #28a428;
    }
    .back-btn {
        background-color: #ccc;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        text-decoration: none;
        margin-right: 1rem;
    }
</style>

<div class="payment-container">
    <div class="section">
        <h3>Booking Details → <strong>Payment</strong> → Done</h3>
        <div style="background: #fff2cc; padding: 10px; border-radius: 5px;">
            Your booking will expire in <span class="highlight">7:08</span>
        </div>
    </div>

    <div class="section billing-box">
        <div class="summary-header">Enter billing details</div>
        <p>These details will reflect on the invoice and no changes are allowed once payment is made.<br>
        Special characters (e.g. !#*) will be removed automatically.</p>
        <input type="text" name="billing_to" class="form-control" placeholder="Billing to">
    </div>

    <div class="section" style="display: flex; gap: 1rem;">
        <div class="method-box" style="flex: 1;">
            <div class="summary-header">Payment method</div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/FPX_Logo.png" alt="FPX" style="height: 40px;">
            <p>Online Banking</p>
        </div>

        <div class="summary-box" style="flex: 1;">
            <div class="summary-header">Booking Summary</div>
            <div><strong>FUTSAL</strong></div>
            <div>Mahallah Salahuddin Al-Ayyubi<br>IIUM Gombak, KL</div>
            <div>22/05/2025 – Saturday</div>
            <div>5:00 pm - 7:00 pm</div>
            <div>RM 5.00</div>
        </div>

        <div class="summary-box" style="flex: 1;">
            <div class="summary-header">Price Summary</div>
            <div>TOTAL: <strong>RM 5.00</strong></div>
        </div>
    </div>

    <div class="section" style="text-align: right;">
        <a href="{{ route('booking') }}" class="back-btn">Back</a>
        <button type="submit" class="proceed-btn">Proceed to Payment</button>
    </div>
</div>
@endsection
