import './bootstrap';
import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// gestione immagini build
import.meta.glob([
    '../img/**'
])

// FUNZIONE PER L'ANTEPRIMA DELLE IMMAGINI 
function showPreview(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-image-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}
const imageinput = document.getElementById('image');
imageinput.addEventListener('change', showPreview);



// FUNZIONE PER MOSTRARE O NASCONDERE LA GESTIONE DELLE IMMAGINI 
function showImageBox() {
    const imageBox = document.getElementById('image_input_container');
    if (setImageInput.checked)
        imageBox.classList.remove('d-none');
    else {
        imageBox.classList.add('d-none');
    }

}
const setImageInput = document.getElementById('set_image');
const imageBox = document.getElementById('image_input_container');

if (setImageInput.checked)
    imageBox.classList.remove('d-none');
else {
    imageBox.classList.add('d-none');
}
setImageInput.addEventListener('change', showImageBox);


// ----------------------------

// FUNZIONE PER L'ANTEPRIMA DELLE IMMAGINI 
function showPreviewPoster(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-poster-image-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}
const posterImageInput = document.getElementById('poster_image');
posterImageInput.addEventListener('change', showPreviewPoster);


// FUNZIONE PER MOSTRARE O NASCONDERE LA GESTIONE DELLE IMMAGINI 
function showImageBoxPoster() {
    const imagePosterBox = document.getElementById('poster_image_input_container');
    if (setPosterImageInput.checked)
    imagePosterBox.classList.remove('d-none');
    else {
        imagePosterBox.classList.add('d-none');
    }
}


const setPosterImageInput = document.getElementById('set_poster_image');
const imagePosterBox = document.getElementById('poster_image_input_container');

if (setPosterImageInput.checked)
imagePosterBox.classList.remove('d-none');
else {
    imagePosterBox.classList.add('d-none');
}
setPosterImageInput.addEventListener('change', showImageBoxPoster);

