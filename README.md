# 🏐 FITPLEX -IIUM Sports Facility Booking System

A Laravel-based web application that allows iium users to book and manage sports facilities such as football field,futsal,volleyball and badminton courts.Admins can manage facilities, bookings, availability, and monitor usage effectively.

## 🚀 GROUP MEMBERS

- FARRISH AZMI BIN SAIFUL AZMI (2226979)
- FARIS FAWWAZ BIN SUHEMI (2226623)
- SYED DANISH AKMAL BIN SYED ZULKHIERIEE (2228675)
- MUHAMMAD HAZIM BIN AZMI (2228065)
- MUHAMMAD LUQMAN BIN ROSHAN (2225733)
- AMMAR REDZA BIN MOHD RADZI (2226293)

---

## Introduction

As sports like futsal,badminton,and volleyball continue to grow in popularity among iium students and staff,there is an increasing demand for streamlined and effective facility management systems. This proposal presents the development of a **FITPLEX*, a web-based platform built with the **Laravel framework**, designed to facilitate the reservation and administration of sports facilities.

The system aims to modernize how users interact with facility booking services, replacing manual and error-prone processes with an efficient, user-friendly digital solution. It allows users to view available facilities, book time slots, manage their reservations, and optionally view their booking history. On the administrative side, it provides tools to manage facilities, monitor bookings, set time slot availability, and track facility usage.

Built using the **Model-View-Controller (MVC)** architecture of Laravel, the system ensures scalability, code reusability, and maintainability. This project focuses on improving operational workflows and delivering a smooth experience for both users and administrators.

---

##  Objectives

The primary objective is to develop a full-featured web application that simplifies the management and booking of sports facilities. Specific goals include:

1. **Provide a User-Friendly Booking Platform**  
  Users should be able to register, view available sports facilities, book available time slots, and manage their own reservations with ease.

2. **Utilize Laravel MVC Framework**  
   Implement the Laravel framework effectively using its routing system, Eloquent models, controllers, views (Blade), and built-in tools like middleware and validation.

3. **Implement Secure User Authentication and Authorization**  
   Use Laravel’s built-in authentication to ensure secure access for users and role-based privileges for administrators.

4. **Enable Efficient Facility and Booking Management for Admins**  
   Allow administrators to manage facilities, set availability, view booking lists, and optionally approve or cancel bookings.

5. **Provide Optional Reporting and History Tracking**  
   Include optional features such as booking history for users and facility usage reports for admins.

---

## Core Features and Functionalities

### User Side

- **Register/Login**  
	•	Create: Allows users (students, staff) to create a new account using their email, matric/staff number, and a secure password.

	•	Read: After logging in, users can access their account details, bookings, and available services.

	•	Update: Users can update their personal information such as email or password.

	•	Delete: Users can request to delete their account (if implemented).

- **View Facilities**  
  	•	Read: Displays a list of all available sports facilities (e.g., futsal courts, volleyball courts, football field) including descriptions, images, and facility details.

- **Check Availability**  
  	•	Read: Allows users to check available dates and time slots for each facility before booking. The system checks for conflicts and displays only free slots.

- **Book a Facility**  
  	•	Create: Enables users to select a facility, date, and time, and submit a booking request. A confirmation is shown after successful submission.
  
	•	Read: Users can view the booking details and status.

	•	Update: Users can edit a booking before the session starts (subject to rules).

	•	Delete: Users can cancel a booking within the allowed cancellation period.

- **Manage Bookings**  
  	•	Read: Displays all bookings made by the user with details such as time, date, and status.
  
	•	Update: Users may reschedule or update their booking details.

	•	Delete: Users can remove or cancel their bookings when needed.


- **Optional: Booking History**  
  		•	Read: Shows the user’s past bookings, dates, and facility usage records for their reference.


---

### Admin Side

- **Facility Management**  
  	•	Create: Admins can add new facilities including name, category (e.g., futsal, badminton), description, and image.
  
	•	Read: Displays a list of all existing facilities.

	•	Update: Admins can edit facility details if any changes occur (e.g., name, operating hours).

	•	Delete: Admins can remove facilities that are no longer available.

- **Time Slot Management**  
  	•	Create: Admin can define time slots available for booking per facility.
  
	•	Read: Shows existing time slots and their statuses.

	•	Update: Admin can adjust or reschedule time slots due to maintenance or changes.

	•	Delete: Remove outdated or conflicting time slots.

- **Booking Oversight**  
  	•	Create: Admins can manually add bookings for users if requested.
  
	•	Read: View and filter all booking records in the system.

	•	Update: Modify details of any booking (e.g., rescheduling, change user).

	•	Delete: Cancel bookings due to unforeseen circumstances.

- **Optional: Booking Approval**  
  	•	Read: View pending booking requests.
  
	•	Update: Admins can approve or reject bookings based on internal policies or availability.

- **Optional: Usage Statistics**  
  	•	Create: Automatically generate reports showing how often each facility is booked, peak usage times, and user activity over a defined period (daily, weekly, monthly).
  
	•	Read: Admins can view graphs, charts, or tables summarizing booking frequency, popular time slots, and facility demand trends.

	•	Update: Admins may apply filters (e.g., date range, facility type) to customize the data shown in the statistics report.

	•	Delete: (Optional) Admins can clear previously generated reports or reset statistics tracking for a new cycle.

---

