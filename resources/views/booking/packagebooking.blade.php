@extends('master.layout')

@section('title', 'Package Booking - FitPlex')

@section('content')
<div class="min-h-screen bg-yellow-100 py-10 px-4">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold italic mb-6">Package Booking</h2>



<form method="POST" action="{{ route('booking.submit') }}">
    @csrf
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-semibold">Package:</label>
            <input type="text" name="package" class="w-full border rounded px-3 py-2" value="Package {{ $data['package'] }}" readonly>
        </div>

        <div>
            <label class="block text-sm font-semibold">Start Date:</label>
            <input type="date" name="start_date" id="start_date" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-semibold">End Date:</label>
            <input type="text" id="end_date" name="end_date" class="w-full border rounded px-3 py-2 bg-gray-100" readonly>
        </div>

        <div>
            <label class="block text-sm font-semibold">Court:</label>
            <input type="text" class="w-full border rounded px-3 py-2" name="court" value="{{ $data['court'] }}" readonly>
        </div>
    </div>

    <div class="mt-6 flex gap-4">
        <a href="{{ url()->previous() }}" class="bg-white border border-gray-400 px-4 py-2 rounded">Back</a>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Proceed to Payment</button>
    </div>
</form>


</div>

<script>
    document.getElementById('start_date').addEventListener('change', function () {
        const startDate = new Date(this.value);
        if (!isNaN(startDate)) {
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + 3);

            const options = { day: '2-digit', month: '2-digit', year: 'numeric', weekday: 'long' };
            const formattedEndDate = endDate.toLocaleDateString('en-GB', options);

            document.getElementById('end_date').value = formattedEndDate;
        }
    });
</script>

@endsection
