// criando campo para pré visualizar a imagem
imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        blah.classList.remove("d-none");
        blah.src = URL.createObjectURL(file)
    }
}