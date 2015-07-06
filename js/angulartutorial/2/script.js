var app = angular.module("app", ["ngAnimate"]);

app.factory("contacts", function () {
  return [
    {"firstName": "Angelica", "lastName": "Britt", "phone": "513-0955"},
    {"firstName": "Viktor", "lastName": "Likin", "phone": "513-0712"},
    {"firstName": "Elena", "lastName": "Pogoda", "phone": "513-0007"}
  ];
});

app.controller("AppCtrl", function (contacts) {
  this.contacts = contacts;
  this.selectedContact = null;
  this.contactCopy = null;

  this.selecteContact = function (contact) {
    this.selectedContact = contact;
    /*
     * Our desired functionality is to have a click edit a row entry,
     * create a temporary copy of the row data, then update.
     */
    this.contactCopy = angular.copy(contact);
  };

  this.saveContact = function () {
    /*
     * This doesn’t appear to work. The reason for this is that selectedContact
     * is being overwritten, so we instead need to assign the firstName attribute
     * instead:
     */
    //this.selectedContact = this.contactCopy;

    console.log(this.contactCopy);
    // It works.
    this.selectedContact.firstName = this.contactCopy.firstName;
  };
});