// let prsnName = document.querySelector('.quizes-person-name');
// let prsnSurname = document.querySelector('.quizes-person-surname');
let quizesName = document.querySelector('.quizes-name');
let quizesDescription = document.querySelector('.quizes-description');
let quizesSubmit = document.querySelector('#quizes-submit');
let iconDate = document.querySelector('.flaticon-clock').outerHTML;
let iconUser = document.querySelector('.flaticon-user').outerHTML;
let quizesList = document.querySelector('#quizes-list');

quizesSubmit.addEventListener('click', function (){
    let wrapper = document.createElement('div');
    wrapper.classList.add('col-lg-6','col-md-6','wow','fadeInUp');
    wrapper.setAttribute('data-wow-duration','2s');
    wrapper.setAttribute('data-wow-delay','0.2s');
    quizesList.insertAdjacentElement('beforeend', wrapper);

    let contains = document.createElement('div');
    contains.classList.add('dlab-blog','style-1','m-b30');
    wrapper.insertAdjacentElement('beforeend', contains);

    let quizesTop = document.createElement('div');
    quizesTop.classList.add('dlab-info');
    contains.insertAdjacentElement('beforeend', quizesTop);

    let quizesTopHeader = document.createElement('div');
    quizesTopHeader.classList.add('dlab-meta');
    quizesTop.insertAdjacentElement('beforeend', quizesTopHeader);

    let headerContains = document.createElement('ul');
    quizesTopHeader.insertAdjacentElement('beforeend', headerContains);

    let headerContainsDate = document.createElement('li');
    headerContainsDate.classList.add('post-date');
    headerContainsDate.innerHTML = `${iconDate}7 March, 2020`
    headerContains.insertAdjacentElement('beforeend', headerContainsDate);

    let headerContainsUser = document.createElement('li');
    headerContainsUser.classList.add('post-author');
    // headerContainsUser.innerHTML = `${iconUser}By ${prsnName.value} ${prsnSurname.value}`
    headerContainsUser.innerHTML = `${iconUser}By Me`
    headerContains.insertAdjacentElement('beforeend', headerContainsUser);

    let quizesTitle = document.createElement('h4');
    quizesTitle.classList.add('dlab-title');
    quizesTitle.innerHTML = quizesName.value;
    quizesTop.insertAdjacentElement('beforeend', quizesTitle);

    let quizesDesc = document.createElement('p');
    quizesDesc.classList.add('m-b0');
    quizesDesc = quizesDescription.value;
    quizesTop.insertAdjacentElement('beforeend', quizesDesc);
})