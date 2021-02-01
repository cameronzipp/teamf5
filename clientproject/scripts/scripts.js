document.getElementById("orgForm").onsubmit = validate;

function validate()
{
    let isValid = true;

    let errors = document.getElementsByClassName("err");
    for (let i =0; i<errors.length;i++){
        errors[i].style.display = "none";
    }

    //check org name
    let org = document.getElementById("oname").value;
    if (org == "")
    {
        let errOrg = document.getElementById("err-oname");
        errOrg.style.display = "inline";
        isValid = false;
    }

    //check website
    let website = document.getElementById("website").value;
    if (website == "")
    {
        let errWebsite = document.getElementById("err-website");
        errWebsite.style.display = "inline";
        isValid = false;
    }

    //check address
    let address = document.getElementById("inputAddress").value;
    if (address == "")
    {
        let errAddress = document.getElementById("err-address");
        errAddress.style.display = "inline";
        isValid = false;
    }

    //check state
    let state = document.getElementById("inputState").value;
    if (state == "none")
    {
        let errState = document.getElementById("err-state");
        errState.style.display = "inline";
        isValid = false;
    }

    //check email
    let email = document.getElementById("cemail").value;
    if (email == "")
    {
        let errEmail = document.getElementById("err-cemail");
        errEmail.style.display = "inline";
        isValid = false;
    }

    //check category
    let category = document.getElementById("category").value;
    if (category == "none")
    {
        let errCategory = document.getElementById("err-category");
        errCategory.style.display = "inline";
        isValid = false;
    }

    return isValid;
}
