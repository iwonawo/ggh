function displayForm(evt, item) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("nav-box__container");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("nav-box__link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-link", "");
  }
  document.getElementById(item).style.display = "block";
  evt.currentTarget.className += " active-link";
}

const eventsTab = document.querySelector('#nav-tab-events')
const newsTab = document.querySelector('#nav-tab-news')

eventsTab.addEventListener("click", () => displayForm(event, 'nav-content-events'))
newsTab.addEventListener("click", () => displayForm(event, 'nav-content-news'))

// auto click on first button
eventsTab.click();