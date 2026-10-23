import { createIcons, icons } from 'lucide';

// Initialize Lucide icons
function initLucide() {
    createIcons({ icons });
}

document.addEventListener('DOMContentLoaded', () => {
    initLucide();

    // Mobile navigation toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    }

    // Sticky header shadow on scroll
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('shadow-sm', 'bg-white/95');
                header.classList.remove('bg-white');
            } else {
                header.classList.remove('shadow-sm', 'bg-white/95');
                header.classList.add('bg-white');
            }
        });
    }

    // FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-trigger');
    faqButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            const icon = btn.querySelector('.faq-chevron');
            const isOpen = !targetContent.classList.contains('hidden');

            // Close all
            document.querySelectorAll('.faq-content').forEach((el) => el.classList.add('hidden'));
            document.querySelectorAll('.faq-trigger').forEach((el) => {
                el.classList.remove('text-[#1E96D7]', 'bg-sky-50/50');
                const ch = el.querySelector('.faq-chevron');
                if (ch) ch.style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                targetContent.classList.remove('hidden');
                btn.classList.add('text-[#1E96D7]', 'bg-sky-50/50');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // Directory Search & Filter
    const searchInput = document.getElementById('vendor-search');
    const categoryButtons = document.querySelectorAll('.vendor-category-btn');
    const vendorCards = document.querySelectorAll('.vendor-card');
    let currentCategory = 'all';

    function filterVendors() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        vendorCards.forEach((card) => {
            const cardCategory = card.getAttribute('data-category') || '';
            const cardText = card.innerText.toLowerCase();

            const matchesCategory = currentCategory === 'all' || cardCategory === currentCategory;
            const matchesQuery = !query || cardText.includes(query);

            if (matchesCategory && matchesQuery) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterVendors);
    }

    categoryButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            categoryButtons.forEach((b) => {
                b.classList.remove('bg-[#1E96D7]', 'text-white', 'shadow-sm');
                b.classList.add('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
            });

            btn.classList.add('bg-[#1E96D7]', 'text-white', 'shadow-sm');
            btn.classList.remove('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');

            currentCategory = btn.getAttribute('data-category') || 'all';
            filterVendors();
        });
    });

    // Events filter
    const eventFilterBtns = document.querySelectorAll('.event-filter-btn');
    const eventCards = document.querySelectorAll('.event-card');
    eventFilterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            eventFilterBtns.forEach((b) => {
                b.classList.remove('border-[#1E96D7]', 'text-[#1E96D7]', 'bg-sky-50');
                b.classList.add('border-slate-200', 'text-slate-600', 'bg-white');
            });
            btn.classList.add('border-[#1E96D7]', 'text-[#1E96D7]', 'bg-sky-50');
            btn.classList.remove('border-slate-200', 'text-slate-600', 'bg-white');

            eventCards.forEach((card) => {
                const type = card.getAttribute('data-type');
                if (filter === 'all' || type === filter) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Lightbox / Image modal
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('gallery-modal');
    const modalImg = document.getElementById('modal-image');
    const modalClose = document.getElementById('modal-close');

    if (modal && modalImg) {
        galleryItems.forEach((item) => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                if (img) {
                    modalImg.src = img.src;
                    modal.classList.remove('hidden');
                }
            });
        });

        if (modalClose) {
            modalClose.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    }

    // Lead / Enquiry Form Toast
    const enquiryForm = document.getElementById('enquiry-form');
    const successToast = document.getElementById('enquiry-toast');
    if (enquiryForm && successToast) {
        enquiryForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = enquiryForm.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Submitting...</span>';
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    enquiryForm.reset();
                    successToast.classList.remove('hidden');
                    setTimeout(() => {
                        successToast.classList.add('hidden');
                    }, 5000);
                }, 800);
            }
        });
    }
});

// Expose helper to re-run lucide on dynamic changes
window.refreshLucide = initLucide;
