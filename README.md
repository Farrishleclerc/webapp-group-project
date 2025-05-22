# 🏐 FITPLEX -IIUM Sports Facility Booking System

A Laravel-based web application that allows iium users to book and manage sports facilities such as football field,futsal,volleyball and badminton courts.Admins can manage facilities, bookings, availability, and monitor usage effectively.

## 🚀 GROUP MEMBERS

- FARRISH AZMI BIN SAIFUL AZMI (2226979)
- FARIS FAWWAZ BIN SUHEMI (2226623)
- SYED DANISH AKMAL BIN SYED ZULKHIEREE (2228675)
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

#### Register/Login
- **Create**: Allows users (students, staff) to create a new account using their email, matric/staff number, and a secure password.  
- **Read**: After logging in, users can access their account details, bookings, and available services.  
- **Update**: Users can update their personal information such as email or password.  
- **Delete**: Users can request to delete their account (if implemented).

#### View Facilities
- **Read**: Displays a list of all available sports facilities (e.g., futsal courts, volleyball courts, football field) including descriptions, images, and facility details.

#### Check Availability
- **Read**: Allows users to check available dates and time slots for each facility before booking. The system checks for conflicts and displays only free slots.

#### Book a Facility
- **Create**: Enables users to select a facility, date, and time, and submit a booking request. A confirmation is shown after successful submission.  
- **Read**: Users can view the booking details and status.  
- **Update**: Users can edit a booking before the session starts (subject to rules).  
- **Delete**: Users can cancel a booking within the allowed cancellation period.

#### Manage Bookings
- **Read**: Displays all bookings made by the user with details such as time, date, and status.  
- **Update**: Users may reschedule or update their booking details.  
- **Delete**: Users can remove or cancel their bookings when needed.

#### Booking History
- **Read**: Shows the user’s past bookings, dates, and facility usage records for their reference.

#### Membership & Packages
- **View Membership Options**
  - **Read**: Users can view a list of available membership types and packages, including descriptions, benefits, pricing, and validity duration.
- **Subscribe to Membership / Purchase Package**
  - **Create**: Allows users to subscribe to a membership plan or purchase a package through the platform, with payment integrated via FPX gateway.
- **View Membership Status**
  - **Read**: Displays current membership details such as type, start and end date, benefits, and usage limits (if any).
- **Cancel Membership**
  - **Delete**: Users can request to cancel an active membership or package, subject to cancellation terms and conditions.

#### Contact Us
- **Create**: Users can send inquiries, complaints, or feedback by filling out a contact form that includes their name, matric/staff number, email, subject, and message.  
- **Read**: Users may view a status update or receive a confirmation email when their inquiry is replied to by the admin.

#### Payment

##### Pay Service Fee
- **Create**: Allows users to initiate a fixed-amount standalone payment (e.g., RM5.00) using FPX. The system redirects users to the payment gateway (e.g., Billplz or ToyyibPay).  
- **Read**: After a successful transaction, users can view their payment receipt and confirmation status.  
- **Update**: Not applicable (optional: allow resend of receipt).  
- **Delete**: Not applicable (transaction records are permanent).

##### Payment History
- **Read**: Displays a list of all past payments including service fees and membership/package purchases with payment date, amount, and transaction status.

---

### Admin Side

#### Facility Management
- **Create**: Admins can add new facilities including name, category, description, and image.  
- **Read**: Displays a list of all existing facilities.  
- **Update**: Admins can edit facility details.  
- **Delete**: Admins can remove facilities that are no longer available.

#### Time Slot Management
- **Create**: Admins can define time slots available for booking per facility.  
- **Read**: Shows existing time slots and their statuses.  
- **Update**: Admins can adjust or reschedule time slots due to maintenance or changes.  
- **Delete**: Remove outdated or conflicting time slots.

#### Booking Oversight
- **Create**: Admins can manually add bookings for users if requested.  
- **Read**: View and filter all booking records.  
- **Update**: Modify booking details.  
- **Delete**: Cancel bookings due to unforeseen circumstances.

#### Booking Approval
- **Read**: View pending booking requests.  
- **Update**: Approve or reject bookings based on internal policies or availability.

#### Usage Statistics
- **Create**: Automatically generate reports showing how often each facility is booked, peak usage times, and user activity over time.  
- **Read**: View graphs, charts, or tables summarizing booking frequency and demand trends.  
- **Update**: Apply filters (e.g., date range, facility type) to customize the report view.  
- **Delete**: *(Optional)* Reset or clear previously generated reports.

#### Membership & Packages Management
- **Create**: Admins can create membership types and packages (e.g., monthly, yearly) with defined benefits and fees.  
- **Read**: View all active/inactive memberships and purchase records.  
- **Update**: Modify membership/package pricing, benefits, or duration.  
- **Delete**: Deactivate outdated packages (existing subscriptions remain valid until expiry).  
- **Assign Membership**: Admins can manually assign memberships to users (e.g., for internal or promotional purposes).

#### Contact Us
- **Create**: Admins can reply to user inquiries via email.  
- **Read**: View all user-submitted inquiries.  
- **Update**: Revise or resend replies.  
- **Delete**: Remove resolved or irrelevant inquiries.

#### Service Fee Management
- **Create**: Define service fee amount (e.g., RM5.00 per booking).  
- **Read**: View all service fee transactions by date, user, or status.  
- **Update**: Modify fee amount or toggle fee requirement per service.  
- **Delete**: Not applicable (transaction data is permanent for auditing).

#### Transaction Logs & Reports
- **Read**: Generate financial reports by user, facility, or date for tracking service fee collections and audit purposes.
---
- **ERD DIAGRAM**

  ![image](https://github.com/user-attachments/assets/6686979b-f266-47cd-9ffd-e266a77011f7)


---

- **SEQUENCE DIAGRAM**

![sqd1](https://github.com/user-attachments/assets/e87ff314-1836-4d88-9a1c-c5cd22176c15)

---

- **MOCKUPS**

![image](https://github.com/user-attachments/assets/1361518c-be44-4d8c-9c25-0c31018370ac)

![image](https://github.com/user-attachments/assets/1431b524-553b-48f5-8ab2-b4626122b0aa)

![image](https://github.com/user-attachments/assets/3361d00c-98b9-475c-9d37-887dd738a90d)

![image](https://github.com/user-attachments/assets/5c5aec25-53e8-4b29-a37b-7efe7ea631c7)

![image](https://github.com/user-attachments/assets/9a618b8a-7785-4627-b8ec-e35bdbd10eba)

![image](https://github.com/user-attachments/assets/4080df11-2136-4bf0-8c74-1d86eabdcfd0)


  ---

- **Challenge Or Difficulties**

- **Collaboration Issues with GitHub**:  
  Our team encountered problems in connecting and linking our GitHub repositories effectively.

- **Difficulties with Live Share Tools**:  
  Using tools like Live Share for real-time collaboration proved challenging. Limited familiarity and technical difficulties, such as connection lags, disrupted seamless collaboration during coding sessions.

- **Time Management Constraints**:  
  Balancing project work with academic and personal responsibilities was a major challenge. Team members had differing schedules, which made it difficult to coordinate meetings and work sessions.

- **Learning Curve for Tools and Frameworks**:  
  Adopting new tools and frameworks like the MVC architecture required extra effort from the team to understand and implement effectively. This slowed down the initial development phase.

- **Debugging and Testing**:  
  Debugging errors in the code often led to the discovery of new issues, creating a cycle of fixing and retesting. This process was extremely time-consuming and required significant attention to detail to ensure all functionalities worked as intended.
