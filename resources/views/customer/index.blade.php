
    <table style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Address</th>
</tr>
@foreach ($customers as $customer)
        <tr style="width:100%; border:1px solid black">
            <td style="width:10%; border: 1px solid black">{{$customer->lastName}} <br></td>
        </tr>
        <tr>
            <td style="width:10%; border: 1px solid black">{{$customer->firstName}} <br></td>
        </tr>
        <tr>        
            <td style="width:10%; border: 1px solid black">{{$customer->email}} <br></td>
        </tr>
        <tr>    
            <td style="width:10%; border: 1px solid black">{{$customer->contactNumber}} <br></td>
        </tr>  
        <tr>  
            <td style="width:10%; border: 1px solid black">{{$customer->address}} <br></td>
        </tr>
    </table>
@endforeach