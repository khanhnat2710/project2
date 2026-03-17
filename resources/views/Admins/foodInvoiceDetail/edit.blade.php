<h2>Create Food Invoice Detail</h2>

<form action="{{ route('foodInvoiceDetail.store') }}" method="POST">

    @csrf

    <div>
        <label>Food Invoice</label>

        <select name="foodInvoiceID">

            @foreach($foodInvoices as $invoice)

                <option value="{{ $invoice->id }}">
                    {{ $invoice->id }}
                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label>Food</label>

        <select name="foodID">

            @foreach($foods as $food)

                <option value="{{ $food->id }}">
                    {{ $food->name }}
                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label>Quantity</label>
        <input type="number" name="quantity">
    </div>

    <br>

    <button type="submit">Save</button>

</form>

<br>

<a href="{{ route('foodInvoiceDetail.index') }}">Back</a>
