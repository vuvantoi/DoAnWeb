<h1>Đăng nhập</h1>
<form action="/check_login" method="POST">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mật khẩu">
    <button type="submit">login</button>
    @csrf
</form>