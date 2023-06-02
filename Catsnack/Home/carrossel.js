const carouselImages = document.querySelector('.carousel-images');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');
const uploadButton = document.querySelector('#upload-button');
const uploadInput = document.querySelector('#image-upload');

let currentIndex = 0;
const images = [
  'image-1.jpg',
  'image-2.jpg',
  'image-3.jpg',
  'image-4.jpg',
  'image-5.jpg'
];

function showImage(index) {
  carouselImages.style.transform = `translateX(-${index * 100}%)`;
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(currentIndex);
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
}

function addImage(imageUrl) {
  images.push(imageUrl);
  const newImage = document.createElement('img');
  newImage.src = imageUrl;
  carouselImages.appendChild(newImage);
}

prevButton.addEventListener('click', prevImage);
nextButton.addEventListener('click', nextImage);
uploadButton.addEventListener('click', () => {
  if (uploadInput.files.length > 0) {
    const file = uploadInput.files[0];
    const reader = new FileReader();
    reader.onload = (
