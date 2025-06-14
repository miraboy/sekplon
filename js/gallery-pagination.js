// js/gallery-pagination.js
document.addEventListener('DOMContentLoaded', function () {
    const imagesPerPage = 12;
    const galleryGrid = document.getElementById('gallery-grid');
    const pagination = document.getElementById('gallery-pagination');

    // Détermine le nombre de colonnes selon la largeur de l'écran
    function getColClass() {
        const width = window.innerWidth;
        if (width < 576) return 'col-6';   // 2 images/ligne (mobile)
        if (width < 768) return 'col-4';   // 3 images/ligne (petite tablette)
        if (width < 992) return 'col-3';   // 4 images/ligne (tablette)
        if (width < 1200) return 'col-2';  // 6 images/ligne (desktop)
        return 'col-2';                    // 6 images/ligne (grand écran)
    }

    // Fonction pour récupérer la liste des images .webp via AJAX
    function fetchImages(callback) {
        fetch('list-images.php')
            .then(response => response.json())
            .then(data => callback(data))
            .catch(error => {
                console.error('Erreur lors du chargement des images:', error);
                callback([]);
            });
    }

    // Fonction pour afficher la galerie
    function renderGallery(images, page) {
        galleryGrid.innerHTML = '';
        const startIdx = (page - 1) * imagesPerPage;
        const endIdx = Math.min(startIdx + imagesPerPage, images.length);
        const colClass = getColClass();

        for (let i = startIdx; i < endIdx; i++) {
            const imgName = images[i];
            const col = document.createElement('div');
            col.className = `${colClass} mb-4 d-flex`;

            col.innerHTML = `
                <div class="gallery-item h-100 d-flex flex-column justify-content-end w-100 position-relative" data-aos="zoom-in" data-aos-delay="100" style="cursor:pointer;">
                <img src="./images/${imgName}"
                    alt="Création graphique Mirabel - /${imgName}"
                    title="Création graphique Mirabel - ${imgName}"
                    class="img-fluid gallery-thumb"
                    loading="lazy"
                    style="width:100%;height:auto;object-fit:contain;display:block;">

                    <div class="gallery-overlay d-flex align-items-center justify-content-center" style="position:absolute;top:0;left:0;right:0;bottom:0;opacity:0;transition:opacity 0.3s;background:rgba(0,0,0,0.45);">
                        <span class="text-white fw-bold" style="font-size:1.1rem;"><i class="bi bi-arrows-fullscreen me-2"></i>Voir en grand</span>
                    </div>
                </div>
            `;
            galleryGrid.appendChild(col);
        }

        // Affiche l'overlay au survol
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('mouseenter', function () {
                const overlay = this.querySelector('.gallery-overlay');
                if (overlay) overlay.style.opacity = 1;
            });
            item.addEventListener('mouseleave', function () {
                const overlay = this.querySelector('.gallery-overlay');
                if (overlay) overlay.style.opacity = 0;
            });
            // Ouvre le modal au clic
            item.addEventListener('click', function () {
                const img = this.querySelector('.gallery-thumb');
                if (img) showImageModal(img.getAttribute('src').replace('./images/', ''));
            });
        });

        // Refresh AOS si disponible
        if (window.AOS) {
            AOS.refresh();
        }
    }

    // Fonction pour afficher la pagination
    function renderPagination(currentPage, totalPages, images) {
        pagination.innerHTML = '';
        
        if (totalPages <= 1) return;

        // Bouton précédent
        if (currentPage > 1) {
            const prevLi = document.createElement('li');
            prevLi.className = 'page-item';
            prevLi.innerHTML = `<button class="page-link" data-page="${currentPage - 1}"><i class="bi bi-chevron-left"></i></button>`;
            pagination.appendChild(prevLi);
        }

        // Pages
        for (let i = 1; i <= totalPages; i++) {
            const li = document.createElement('li');
            li.className = 'page-item' + (i === currentPage ? ' active' : '');
            li.innerHTML = `<button class="page-link" data-page="${i}">${i}</button>`;
            pagination.appendChild(li);
        }

        // Bouton suivant
        if (currentPage < totalPages) {
            const nextLi = document.createElement('li');
            nextLi.className = 'page-item';
            nextLi.innerHTML = `<button class="page-link" data-page="${currentPage + 1}"><i class="bi bi-chevron-right"></i></button>`;
            pagination.appendChild(nextLi);
        }

        // Ajout des événements de clic
        pagination.querySelectorAll('.page-link').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(btn.getAttribute('data-page'));
                if (page && page !== currentPage) {
                    renderGallery(images, page);
                    renderPagination(page, totalPages, images);
                    
                    // Scroll vers le haut de la galerie
                    galleryGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    // Fonction pour afficher le modal Bootstrap avec l'image en grand
    function showImageModal(imgName) {
        let modal = document.getElementById('imageModal');
        if (!modal) {
            modal = document.createElement('div');
            modal.className = 'modal fade';
            modal.id = 'imageModal';
            modal.tabIndex = -1;
            modal.innerHTML = `
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Aperçu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="" alt="Aperçu" id="modalImage" class="img-fluid" style="max-height:70vh;">
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(modal);
        }
        document.getElementById('modalImage').src = './images/' + imgName;
        const bsModal = new bootstrap.Modal(modal);
        bsModal.show();
    }

    // Initialisation
    let imagesCache = [];
    let currentPage = 1;
    
    function initGallery() {
        fetchImages(function (images) {
            if (!Array.isArray(images) || images.length === 0) {
                galleryGrid.innerHTML = `
                    <div class="col-12 text-center">
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle me-2"></i>
                            Aucune image trouvée dans la galerie.
                        </div>
                    </div>
                `;
                return;
            }
            
            imagesCache = images;
            const totalPages = Math.ceil(images.length / imagesPerPage);
            renderGallery(images, 1);
            renderPagination(1, totalPages, images);
            
            // Affichage du compteur d'images
            const totalImagesInfo = document.createElement('div');
            totalImagesInfo.className = 'text-center mb-3 text-muted';
            totalImagesInfo.innerHTML = `<small><i class="bi bi-images me-1"></i>${images.length} création${images.length > 1 ? 's' : ''} au total</small>`;
            galleryGrid.parentNode.insertBefore(totalImagesInfo, galleryGrid);
        });
    }

    // Rendre la galerie responsive lors du redimensionnement de la fenêtre
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (imagesCache.length > 0) {
                // Trouver la page actuellement affichée
                const active = pagination.querySelector('.page-item.active .page-link');
                currentPage = active ? parseInt(active.textContent) || 1 : 1;
                const totalPages = Math.ceil(imagesCache.length / imagesPerPage);
                renderGallery(imagesCache, currentPage);
                renderPagination(currentPage, totalPages, imagesCache);
            }
        }, 250);
    });

    // Initialiser la galerie au chargement
    initGallery();
});

/* CSS personnalisé pour la galerie - À ajouter dans css/style.css */
