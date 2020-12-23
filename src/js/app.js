const icon = document.querySelector('.icon-vertical-points')
    .addEventListener('click', () => {
        const x = document.querySelector('.element')
        if (x.style.visibility === "hidden") {
            x.style.visibility = "visible";
        } else {
            x.style.visibility = "hidden";
        }
    })