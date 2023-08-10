clickboardInput.onclick = () => {
    navigator.clipboard.writeText(clickboardInput.value)
    successMessage.classList.add('active')
    setTimeout(() => successMessage.classList.remove('active'), 2000)
}

document.getElementById("open-modal-btn").addEventListener("click", function(){
    document.getElementById("my-modal").classList.add("open")
})

document.getElementById("close-my-modal-btn").addEventListener("click", function(){
    document.getElementById("my-modal").classList.remove("open")
})



