<html> 
    <head>
        <title>Home</title>
    </head>
    <body>
        <center>
            <form action="{{url('/send')}}" method="POST">
            @csrf
                <div>  
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
                </div>

                <br>

                <div>  
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
                </div>

                <br>

                <div>  
                <label>Number</label>
                <input type="number" name="number" placeholder="Phone">
                </div>

                <br>

                <div>  
                <input type="submit" name="" value="Send">
                </div>
            </form>
    </center>
</body> 
</html>
