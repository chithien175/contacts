<h1>Contact Form</h1>
@if(Session::has('success'))
<p>
    {{ Session::get('success') }}
</p>
@endif
<div class="container">
    <form action="{{ route('store.thienpham.contact') }}" method="post">
        @csrf
        <input type="text" name="fullname" placeholder="Your fullname.." required>
        <br>
        <input type="email" name="email" placeholder="Your email.." required>
        <br>
        <input type="text" name="address" placeholder="Your address..">
        <br>
        <input type="text" name="phone" placeholder="Your phone..">
        <br>
        <input type="text" name="subject" placeholder="Your subject..">
        <br>
        <textarea placeholder="Message" name="msg" required></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>