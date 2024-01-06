const foto = document.getElementById('foto')
const previewField = document.getElementById('preview')
console.log(foto)

foto.addEventListener("change", readImage, false);
		function readImage() {
			if (this.files && this.files[0]) {
				//FileReader é usado para ler arquivos selecionados pelo usuário.
				var file = new FileReader();
				//Esta linha define um evento que será acionado quando o processo de leitura do arquivo estiver concluído
				file.onload = function(e) {
				//Nesta linha, estamos atribuindo o resultado da leitura do arquivo à propriedade src de um elemento HTML com o ID "preview
					preview.src = e.target.result;
				};
				file.readAsDataURL(this.files[0]);
			}
		}