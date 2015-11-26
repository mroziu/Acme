# Acme
Ticket reservation

http://www.damianmrozek.pl/ticket/

Acme Co host free events for customers to attend and require a web application to allow customers to reserve tickets in advance. The customer will visit a front­end site that comprises 2 pages: 

● Reservation Form ­ where the user enters their tickets request and personal details. 

● Booking Confirmation ­ where the user receives their confirmation of booking. 

There are 3 different types of ticket available for the first event: adult, child and senior. A customer reservation can comprise multiple quantities of each ticket type but must comply with the following business rules for the first event: 

● A customer reservation must have at least 1 ticket minimum and 6 tickets maximum in total 

● A customer reservation must have at least 1 adult ticket for for every 4 child tickets 

● A customer reservation cannot have more than the max­tickets­allowed value for a given ticket type. The default max­ticket­allowed values are: adult(4), child(4), senior(3). 

Once the customers reservation has been submitted and passes validation, it is persisted to a data store and they are shown a booking confirmation page which includes the booking confirmation number: 

● The booking confirmation number is unique 8 character/digit string, and cannot be incremental. 

Frontend: 

● Reservation Form Page 

● Customer should be able to view each type of ticket and add a required quantity for each reservation. 

● Customer should be required to enter following fields in the reservation form: name (string), email (email) 

● Customer should be able to optionally enter the following fields in the reservation form: 

telephone number (string), gender (male/female) 

● Booking Confirmation Page 

○ Customer should be able to view confirmation of their reservation showing: 

Ticket types and quantity for their order, name, email, telephone (if present), gender (if present) and booking confirmation number
