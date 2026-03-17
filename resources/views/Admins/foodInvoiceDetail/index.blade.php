@extends('layouts.appAdmin')

<div class="container mt-4">

    <h2 class="mb-4">Food Invoice Detail List</h2>

    <a href="{{ route('foodInvoiceDetail.create') }}" class="btn btn-success mb-3">
        Add New
    </a>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
        <tr>
            <th>Food Invoice ID</th>
            <th>Food</th>
            <th>Quantity</th>
            <th width="200">Action</th>
        </tr>
        </thead>

        <tbody>

        @foreach($details as $detail)

            <tr>

                <td>{{ $detail->foodInvoiceID }}</td>

                <td>{{ $detail->food->name ?? '' }}</td>

                <td>{{ $detail->quantity }}</td>

                <td>

                    <a href="{{ route('foodInvoiceDetail.edit',[$detail->foodInvoiceID,$detail->foodID]) }}"
                       class="btn btn-warning btn-sm">
                        Edit </a>

                    <form action="{{ route('foodInvoiceDetail.destroy',[$detail->foodInvoiceID,$detail->foodID]) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>
