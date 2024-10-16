<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1><a href="/showCreate">Create Transaction</a></h1>
    </div>
    <h1>Transaction</h1>
    <div>
        @foreach ($transactions as $transaction)
            <h2>Title:<a href="/read/{{$transaction->id}}">{{$transaction->transaction_title}}</a></h2>
            <h2>Description:<h4>{{$transaction->description}}</h4></h2>
            <h2>Status:<h4>{{$transaction->status}}</h4></h2>
            <h2>Total Amount:<h4>{{$transaction->total_amount}}</h4></h2>
            <h2>Transaction Number:<h4>{{$transaction->transaction_number}}</h4></h2>
            <h2>Created-At:<h4>{{$transaction->created_at}}</h4></h2>
            <h2>Updated-At:<h4>{{$transaction->updated_at}}</h4></h2>
            <hr>
        @endforeach
    </div>
</body>
</html>
