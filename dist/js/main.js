

function makeImgResponsive() {
	document.querySelectorAll('img').forEach(img => img.classList.add('responsive-img'));
}
/*function toggleClicked() {
	console.log(this);
}*/
const cards = document.querySelectorAll('.card');
cards.forEach(card => card.addEventListener('click', () => {
	card.classList.toggle('clicked');

	if(card.classList.contains('clicked')){
		window.open(card.dataset.link, '_blank');
	}
}));
makeImgResponsive();

