<html>
<head>
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet">
</head>
<body>
<h2>Client Contact for Purchase</h2>

<hr>
<h3>Client Details</h3>
<p><strong>Client Name:</strong> {{ $contact->name }}</p>
<p><strong>E-Mail:</strong> {{ $contact->email }}</p>
<p><strong>Phone:</strong> {{ $contact->phone }}</p>
<p><strong>Message:</strong> {{ $contact->message}}</p>

<hr>
<h3>Vehicle Details</h3>
<div class="row">
    <div class="col-md-3">
        <p><strong>Name:</strong> {{ $vehicle->name }}</p>
        <p><strong>Model:</strong> {{ $vehicle->brand->name }}</p>
        <p><strong>Price:</strong> {{ $vehicle->price ? 'XAF '.$vehicle->price : 'NEGOTIABLE'}}</p>
        <p><strong>Make Year:</strong> {{ $vehicle->make_year }}</p>
    </div>
    <div class="col-md-6">
        <img src="{{ $message->embed(asset( $vehicle->photo ? $vehicle->photo->photo : 'images/no-photo.png')) }}" style="height: 150px" class="img-thumbnail">
    </div>
</div>
</body>
</html>