<?php
$page_title = 'Shineray Querétaro · Agencia oficial de autos';
$page_description = 'Distribuidor oficial Shineray en Querétaro. SUVs, pickups y crossovers nuevos, servicio postventa y refacciones originales.';
$page_active = 'home';
$page_og_image = 'img/hero-shineray.jpg';
include 'partials/header.php';
?>

<!-- HERO -->
<section class="hero">
  <img src="img/hero-shineray.jpg" alt="Pickup Shineray en carretera de montaña" class="hero-bg" width="1920" height="1080" />
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="eyebrow eyebrow-dark">
        <span class="dot"></span> Sucursal Querétaro
      </span>
      <h1>
        Diseñados para
        <span class="accent">conquistar el camino.</span>
      </h1>
      <p>Descubre la nueva línea Shineray en Querétaro. SUVs, pickups y crossovers con tecnología de punta, garantía oficial y atención que marca la diferencia.</p>
      <div class="hero-buttons">
        <a href="modelos.php" class="btn btn-primary">
          Ver modelos
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
        </a>
        <a href="contacto.php" class="btn btn-outline">Cotizar ahora</a>
      </div>
      <dl class="hero-stats">
        <div class="hero-stat"><dt class="num">5</dt><dd class="label">Modelos</dd></div>
        <div class="hero-stat"><dt class="num">100K</dt><dd class="label">Km garantía</dd></div>
        <div class="hero-stat"><dt class="num">24h</dt><dd class="label">Cotización</dd></div>
      </dl>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="section">
  <div class="container">
    <div class="features-grid">
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
        <h3>Garantía oficial</h3>
        <p>5 años o 100,000 km respaldados por Shineray México.</p>
      </div>
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        <h3>Servicio certificado</h3>
        <p>Técnicos capacitados y refacciones 100% originales.</p>
      </div>
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <h3>Aquí en Querétaro</h3>
        <p>Sucursal moderna sobre Av. 5 de Febrero, fácil acceso.</p>
      </div>
    </div>
  </div>
</section>

<!-- MODELOS DESTACADOS -->
<section class="section section-surface">
  <div class="container">
    <div class="section-head-row">
      <div class="section-header">
        <span class="eyebrow"><span class="line"></span> Nuestra línea</span>
        <h2>Modelos destacados</h2>
        <p>Una flota pensada para la familia, el trabajo y la aventura. Cotiza tu modelo favorito hoy mismo.</p>
      </div>
      <a href="modelos.php" class="see-all">
        Ver todos
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><polyline points="9,18 15,12 9,6"/></svg>
      </a>
    </div>

    <div class="models-grid">
      <article class="model-card">
        <div class="img-wrap">
          <img src="img/model-suv.jpg" alt="Shineray X30L" loading="lazy" width="1280" height="800" />
          <span class="tag">SUV Familiar</span>
        </div>
        <div class="model-card-body">
          <h3>Shineray X30L</h3>
          <p class="price">Desde $329,900</p>
          <a href="modelos.php" class="more">Ver detalles
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
          </a>
        </div>
      </article>
      <article class="model-card">
        <div class="img-wrap">
          <img src="img/model-pickup.jpg" alt="Shineray T10" loading="lazy" width="1280" height="800" />
          <span class="tag">Pickup Doble Cabina</span>
        </div>
        <div class="model-card-body">
          <h3>Shineray T10</h3>
          <p class="price">Desde $419,900</p>
          <a href="modelos.php" class="more">Ver detalles
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
          </a>
        </div>
      </article>
      <article class="model-card">
        <div class="img-wrap">
          <img src="img/model-crossover.jpg" alt="Shineray X3" loading="lazy" width="1280" height="800" />
          <span class="tag">Crossover Urbano</span>
        </div>
        <div class="model-card-body">
          <h3>Shineray X3</h3>
          <p class="price">Desde $279,900</p>
          <a href="modelos.php" class="more">Ver detalles
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- DEALERSHIP CTA -->
<section class="section-dark">
  <div class="dealer-split">
    <div class="dealer-img">
      <img src="img/dealership.jpg" alt="Showroom Shineray Querétaro" loading="lazy" width="1600" height="1000" />
    </div>
    <div class="dealer-content">
      <span class="eyebrow"><span class="line"></span> Visítanos</span>
      <h2>Tu próxima Shineray<br/>te espera en Querétaro.</h2>
      <p>Conoce nuestra sucursal moderna, prueba el modelo que más te guste y recibe asesoría personalizada para encontrar tu auto ideal.</p>
      <div class="dealer-buttons">
        <a href="contacto.php" class="btn btn-primary">
          Agendar visita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
        </a>
        <a href="servicio.php" class="btn btn-dark-outline">Servicio postventa</a>
      </div>
      <div class="stars">
        <span class="row">
          <?php for ($i = 0; $i < 5; $i++): ?>
            <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </span>
        <span>+200 clientes satisfechos en Querétaro</span>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
