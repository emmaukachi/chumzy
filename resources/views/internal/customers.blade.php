<ul>
    <li><a href="/">Home</a></li>
    <li><a href="about">About us</a></li>
    <li><a href="contact">Contact us</a></li>
    <li><a href="customers">Customers</a></li>
</ul>
<h1>Customers</h1>


<ul>
     @foreach($customers as $customer) 
        <li>{{ $customer }}</li>
    @endforeach

</ul>