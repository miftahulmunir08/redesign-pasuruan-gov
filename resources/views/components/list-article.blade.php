  <style>
      .article-card {
          border-radius: 20px;
          border: none;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
          overflow: hidden;
      }

      .article-img {
          border-radius: 15px;
          object-fit: cover;
          height: 140px;
          width: 140px;
      }

      .article-title {
          font-weight: 600;
          font-size: 1.0rem;
          color: #28a745;
          /* hijau */
          text-decoration: none;
      }

      .article-title:hover {
          text-decoration: underline;
      }

      .article-meta {
          font-size: 0.85rem;
          color: #666;
      }

      .badge-custom {
          position: absolute;
          bottom: 8px;
          right: 15px;
      }
  </style>

  <div class="container my-4">
      <h2 class="fw-bold mb-3">Berita Lainnya</h2>

      <div class="card article-card p-2">
          <div class="row g-3 align-items-center ">
              <!-- Gambar -->
              <div class="col-auto position-relative">
                  <img src="https://picsum.photos/300/200" alt="Article Image" class="article-img">
                  <span class="badge bg-success badge-custom mr-2">GOV</span>
              </div>
              <!-- Konten -->
              <div class="col">
                  <a href="#" class="article-title d-block mb-1">
                      Mari Mengenal Kab Pasuruan
                  </a>
                  <p class="mb-2 text-muted">
                      Arthroscopy/Artroskopi, berasal dari Bahasa Yunani. Arthro.
                  </p>
                  <div class="article-meta">
                      <span>07 Jun, 2024</span> &nbsp; | &nbsp; <strong>Author</strong>
                  </div>
              </div>
          </div>
          <div class="row g-3 align-items-center mt-3">
              <!-- Gambar -->
              <div class="col-auto position-relative">
                  <img src="https://picsum.photos/300/200" alt="Article Image" class="article-img">
                  <span class="badge bg-success badge-custom mr-2">GOV</span>
              </div>
              <!-- Konten -->
              <div class="col">
                  <a href="#" class="article-title d-block mb-1">
                      Mari Mengenal Kab Pasuruan
                  </a>
                  <p class="mb-2 text-muted">
                      Arthroscopy/Artroskopi, berasal dari Bahasa Yunani. Arthro.
                  </p>
                  <div class="article-meta">
                      <span>07 Jun, 2024</span> &nbsp; | &nbsp; <strong>Author</strong>
                  </div>
              </div>
          </div>
      </div>
  </div>