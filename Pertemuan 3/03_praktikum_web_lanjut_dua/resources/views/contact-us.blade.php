@if(session('sukses'))
<div>{{session('sukses')}}</div>
@endif

<form method="POST" action="{{route('contact-us.store')}}">
    @csrf
<h1>Kontak Kami</h1>
<input type="text" name="name" placeholder="Nama">
<input type="text" name="email" placeholder="Email">
<input type="text" name="password" placeholder="Password">
<button type="submit" name="submit" value="submit">Kirim</button>
</form>