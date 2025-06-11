@extends('master.layout')

@section('title', 'Package Booking - FitPlex')

@section('content')
<div class="min-h-screen bg-yellow-100 flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 italic">🏋️‍♀️ Package Booking</h2>
            <a href="{{ url()->previous() }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition text-sm">← Back</a>
        </div>

        <form method="POST" action="{{ route('booking.submit') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Package</label>
                <input type="text" name="package" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 text-gray-700" value="Package {{ $data['package'] }}" readonly>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                <input type="text" id="end_date" name="end_date" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100" readonly>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 text-gray-700" name="court" value="{{ $data['court'] }}" readonly>
            </div>

            <div class="flex justify-end mt-6">
                <form method="POST" action="{{ route('payment.process') }}">
                    @csrf
                    <button type="submit" class="inline-block px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
                        💳 Confirm & Pay
                    </button>
                </form>
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
</div>
@endsection
