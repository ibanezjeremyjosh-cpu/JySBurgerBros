<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>J&S Burger Bros</title>
<style>
:root{--dark:#6b2d1f;--steel:#c1440e;--light:#fdf1e3;--white:#fff;--gray:#8a7461;--orange:#e8871e;--radius:14px}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:sans-serif;background:var(--light);color:#2b1810}
.screen{display:none;min-height:100vh;flex-direction:column}
.screen.active{display:flex}
nav{background:var(--dark);padding:0 24px;height:60px;display:flex;align-items:center;justify-content:space-between}
.logo{color:#fff;font-weight:900;font-size:1.2rem}
.logo span{color:#f6c453}
.nav-btn{background:none;border:none;color:#f6c453;font-weight:700;padding:8px 12px;cursor:pointer}
.nav-cart{background:var(--orange);color:#fff;border:none;border-radius:8px;padding:8px 14px;font-weight:800;cursor:pointer}
.wrap{max-width:420px;margin:60px auto;background:#fff;border-radius:var(--radius);padding:36px;box-shadow:0 4px 20px rgba(0,0,0,.1)}
.wrap.wide{max-width:800px}
h1{font-size:1.5rem;color:var(--dark);margin-bottom:6px}
p.sub{color:var(--gray);margin-bottom:20px}
.form-group{margin-bottom:14px}
.form-group label{display:block;font-weight:700;font-size:.85rem;margin-bottom:4px}
.form-group input{width:100%;padding:10px 14px;border:2px solid var(--light);border-radius:8px}
.btn{width:100%;background:var(--dark);color:#fff;border:none;border-radius:8px;padding:12px;font-weight:800;cursor:pointer;margin-top:6px}
.btn:hover{background:var(--steel)}
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
<!-- LOGIN -->
<div class="screen active" id="s-login">
  <div class="wrap">
    <h1>🍔 J&S<span style="color:var(--steel)">Burger Bros</span></h1>
    <p class="sub">Inicia sesión para continuar</p>
    <div class="form-group"><label>Correo</label><input type="email" placeholder="correo@ejemplo.com"></div>
    <div class="form-group"><label>Contraseña</label><input type="password" placeholder="••••••••"></div>
    <button class="btn" onclick="go('s-home')">Iniciar Sesión</button>
  </div>
</div>
<!-- HOME -->
<div class="screen" id="s-home">
  <nav>
    <div class="logo">J&S<span>Burger Bros</span></div>
    <button class="nav-cart">🛒 Carrito</button>
  </nav>
  <div class="section">
    <h1>Menú</h1>
    <p class="sub">Elige tu favorito</p>
    <div class="grid">
      <div class="card" onclick="go('s-detail')"><div class="card-img">🍔</div><div class="card-body"><div class="card-name">Hamburguesa Clásica</div><div class="card-price">Q45.00</div></div></div>
      <div class="card" onclick="go('s-detail')"><div class="card-img">🍕</div><div class="card-body"><div class="card-name">Pizza Margarita</div><div class="card-price">Q80.00</div></div></div>
      <div class="card" onclick="go('s-detail')"><div class="card-img">🍔</div><div class="card-body"><div class="card-name">Hamburguesa BBQ</div><div class="card-price">Q55.00</div></div></div>
      <div class="card" onclick="go('s-detail')"><div class="card-img">🍕</div><div class="card-body"><div class="card-name">Pizza Pepperoni</div><div class="card-price">Q95.00</div></div></div>
    </div>
  </div>
</div>
<!-- DETALLE -->
<div class="screen" id="s-detail">
  <nav>
    <div class="logo">J&S<span>Burger Bros</span></div>
    <button class="nav-cart">🛒 Carrito</button>
  </nav>
  <button class="back" onclick="go('s-home')">← Volver al Menú</button>
  <div class="wrap wide">
    <div class="detail">
      <div class="detail-img">🍔</div>
      <div class="detail-body">
        <h1>Hamburguesa Clásica</h1>
        <p class="sub">Carne, lechuga, tomate, queso y salsa especial en pan brioche.</p>
        <div class="price">Q45.00</div>
        <button class="btn" style="background:var(--orange)">Agregar al Carrito</button>
      </div>
    </div>
  </div>
</div>
<script>
function go(id){
  document.querySelectorAll('.screen').forEach(s=>s.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  window.scrollTo(0,0);
}
</script>
</body>
</html>