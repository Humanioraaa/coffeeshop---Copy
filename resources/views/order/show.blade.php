@extends('layout.pages')
@section('content')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endpush

<div class="container my-5">
    <h2 class="text-center mb-4">Track Your Order Status</h2>

    <div class="timeline">
        @foreach ($orderLogs as $log)
            <div class="timeline-step card border border-success p-3 mt-5 {{ $log->new_status == $order->status ? 'active' : '' }}">
                <div class="timeline-icon">
                    @if ($log->new_status == $order->status)
                        <i class="bi bi-check-circle-fill text-success"></i>
                    @else
                        <i class="bi bi-clock text-muted"></i>
                    @endif
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold mb-1">{{ strtoupper($log->new_status) }}</h5>
                    <p class="mb-1">
                        @switch($log->new_status)
                            @case('unpaid')
                                Waiting for payment.
                                @break
                            @case('paid')
                                Your payment has been received.
                                @break
                            @case('proceed')
                                Your order is being prepared.
                                @break
                            @case('completed')
                                Order completed!
                                @break
                            @case('cancelled')
                                Order cancelled.
                                @break
                        @endswitch
                    </p>
                    <small class="text-muted">{{ $log->created_at->format('d M Y, H:i') }}</small>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        @if ($order->status == 'completed')
            <a href="{{ route('review.create', ['order' => $order->id]) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i> Write a Review
            </a>
        @else
            <a href="{{ route('order.index') }}" class="btn btn-success">+ Place New Order</a>
        @endif
        <a href="/" class="btn btn-outline-secondary mt-2">
            <i class="bi bi-house"></i> Home
        </a>
    </div>

</div>

@endsection

@section('styles')
<style>
    .timeline {
        position: relative;
        padding-left: 30px;
        margin: 0 auto;
        max-width: 600px;
    }

    .timeline-step {
        position: relative;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-left: 60px;
    }

    .timeline-step::before {
        content: '';
        position: absolute;
        top: 0;
        left: 30px;
        width: 4px;
        height: 100%;
        background-color: #28a745;
    }

    .timeline-step:last-child::before {
        height: 50%;
    }

    .timeline-step .timeline-icon {
        position: absolute;
        top: 0;
        left: 10px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    .timeline-step.active .timeline-icon {
        background-color: #28a745;
        color: #fff;
    }

    .timeline-content {
        padding: 15px;
        background-color: #e9ecef;
        border-radius: 10px;
        width: 100%;
    }

    .timeline-step.active .timeline-content {
        background-color: #d4edda;
    }
</style>
@endsection
