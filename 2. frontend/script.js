// Funktion zum Öffnen des Popups
function openPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'flex';
  }
  
  // Funktion zum Schließen des Popups
  function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
  }
  
  // Funktion zum Öffnen des Luft-Popups
  function openPopupLuft() {
    var popupLuft = document.getElementById('popupLuft');
    popupLuft.style.display = 'flex';
  }
  
  // Funktion zum Schließen des Luft-Popups
  function closePopupLuft() {
    var popupLuft = document.getElementById('popupLuft');
    popupLuft.style.display = 'none';
  }
  
  // Funktion zum Öffnen des Gesamtkomfort-Popups
  function openPopupGesamtkomfort() {
    var popupGesamtkomfort = document.getElementById('popupGesamtkomfort');
    popupGesamtkomfort.style.display = 'flex';
  }
  
  // Funktion zum Schließen des Gesamtkomfort-Popups
  function closePopupGesamtkomfort() {
    var popupGesamtkomfort = document.getElementById('popupGesamtkomfort');
    popupGesamtkomfort.style.display = 'none';
  }
  
  // Ereignislistener für den Öffnen-Button hinzufügen
  document.getElementById('openPopup').addEventListener('click', openPopup);
  document.getElementById('openPopupLuft').addEventListener('click', openPopupLuft);
  document.getElementById('openPopupGesamtkomfort').addEventListener('click', openPopupGesamtkomfort);
  
  // Ereignislistener für den Schließen-Button hinzufügen
  document.getElementById('closePopup').addEventListener('click', closePopup);
  document.getElementById('closePopupLuft').addEventListener('click', closePopupLuft);
  document.getElementById('closePopupGesamtkomfort').addEventListener('click', closePopupGesamtkomfort);
  
