<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'FastBites')</title>
<style>
:root{--dark:#6b2d1f;--steel:#c1440e;--light:#fdf1e3;--gray:#8a7461;--orange:#e8871e;--radius:14px}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:sans-serif;background:var(--light);color:#2b1810}
nav{background:var(--dark);padding:0 24px;height:60px;display:flex;align-items:center;justify-content:space-between}
.logo{color:#fff;font-weight:900;font-size:1.2rem}
.logo span{color:#f6c453}
.nav-cart{background:var(--orange);color:#fff;border:none;border-radius:8px;padding:8px 14px;font-weight:800;cursor:pointer}
.wrap{max-width:420px;margin:60px auto;background:#fff;border-radius:var(--radius);padding:36px;box-shadow:0 4px 20px rgba(0,0,0,.1)}
.wrap.wide{max-width:800px}
h1{font-size:1.5rem;color:var(--dark);margin-bottom:6px}
p.sub{color:var(--gray);margin-bottom:20px}
.btn{width:100%;background:var(--dark);color:#fff;border:none;border-radius:8px;padding:12px;font-weight:800;cursor:pointer;margin-top:6px}
.section{padding:30px 24px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px}
.card{background:#fff;border-radius:var(--radius);overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.08);cursor:pointer}
.card-img{height:130px;background:linear-gradient(135deg,#f6c453,#e8871e);display:flex;align-items:center;justify-content:center;font-size:3rem}
.card-body{padding:14px}
.card-name{font-weight:800}
.card-price{font-weight:900;color:var(--dark);margin-top:6px}
.detail{display:grid;grid-template-columns:1fr 1fr;gap:0}
.detail-img{background:linear-gradient(135deg,#f6c453,#e8871e);display:flex;align-items:center;justify-content:center;font-size:6rem;min-height:260px}
.detail-body{padding:30px}
.price{font-size:1.6rem;font-weight:900;color:var(--dark);margin:10px 0}
.back{background:none;border:none;color:var(--steel);font-weight:700;cursor:pointer;margin:16px 0 0 24px}
@media(max-width:600px){.detail{grid-template-columns:1fr}}
</style>
</head>
<body>
<nav>
    <div class="logo">Fast<span>Bites</span></div>
    <button class="nav-cart">🛒 Carrito</button>
</nav>
@yield('content')
</body>
</html>