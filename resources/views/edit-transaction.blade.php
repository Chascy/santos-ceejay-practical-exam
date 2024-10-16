<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/update/{{$transaction->id}}" method="POST">
        @method('PUT')
        @csrf
        <label for="transaction_title">Title:</label>
        <input type="text" name="transaction_title" value={{$transaction->transaction_title}}>
        <br>

        <label for="description">description:</label>
        <textarea  name="description" >{{$transaction->description}}</textarea>
        <br>

        <label for="status">status:</label>
        <select name="status" id="" value={{$transaction->status}}>
            <option value="successful">successful</option>
            <option value="declined">declined</option>
        </select>
        <br>
        
        <label for="total_amount">total_amount:</label>
        <input type="text" name="total_amount" value={{$transaction->total_amount}}>
        <br>

        <label for="transaction_number">transaction_number:</label>
        <input type="text" name="transaction_number" value={{$transaction->transaction_number}}>
        <br>
        <input type="submit">
    </form>
    <a href="/"><h1>Home</h1></a>

</body>
</html>

