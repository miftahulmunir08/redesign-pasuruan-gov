<style>
    .category-card {
        border-radius: 20px;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 1rem 1.5rem;
        background: #fff;
    }

    .category-title {
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .category-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        font-size: 1rem;
        font-weight: 500;
        color: #333;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .category-item:last-child {
        border-bottom: none;
    }

    .category-item:hover {
        color: #28a745;
        padding-left: 4px;
    }

    .category-item i {
        color: #28a745;
        transition: transform 0.2s ease;
    }

    .category-item:hover i {
        transform: translateX(3px);
    }
</style>
</head>



<div class="container" style="">
    <div class="card category-card">
        <h5 class="category-title">Kategori</h5>
        <ul class="category-list">
            <li class="category-item">
                Agrowisata
                <i class="las la-angle-right"></i>
            </li>
            <li class="category-item">
                Budaya
                <i class="las la-angle-right"></i>
            </li>
            <li class="category-item">
                Ekonomi
                <i class="las la-angle-right"></i>
            </li>
            <li class="category-item">
                Pendidikan
                <i class="las la-angle-right"></i>
            </li>
            <li class="category-item">
                Kepegawaian
                <i class="las la-angle-right"></i>
            </li>
        </ul>
    </div>
</div>