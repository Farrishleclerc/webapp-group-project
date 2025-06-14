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

![image](https://github.com/user-attachments/assets/8fb27bcd-bb4f-4377-bb9e-a253a76ffa44)

![image](https://github.com/user-attachments/assets/082e1cd6-8cea-4008-b8c8-556c3b65bc57)


![image](https://github.com/user-attachments/assets/f5ad53f2-23a1-411a-afc3-e0ef0c5b0bb5)

![image](https://github.com/user-attachments/assets/9a618b8a-7785-4627-b8ec-e35bdbd10eba)

![image](https://github.com/user-attachments/assets/955e8f2c-5556-4112-ba10-615ca87236ab)


![image](https://github.com/user-attachments/assets/4080df11-2136-4bf0-8c74-1d86eabdcfd0)

---

## Actual Website

- **USER**

<img width="1470" alt="Screenshot 2025-06-12 at 5 01 18 AM" src="https://github.com/user-attachments/assets/712ffcd3-5f88-4a1b-99b1-8f9c3f23767e" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 03 39 AM" src="https://github.com/user-attachments/assets/80a81f30-8a83-48bb-a069-c9861fd634c4" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 03 14 AM" src="https://github.com/user-attachments/assets/3d933e23-b1cb-496f-9a12-f00b87f10b61" />

<img width="1460" alt="Screenshot 2025-06-12 at 5 01 59 AM" src="https://github.com/user-attachments/assets/4f798fba-6118-4faf-b8f0-d1bf2b1cc77f" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 02 14 AM" src="https://github.com/user-attachments/assets/c34850ff-951c-4509-85c8-c6936641dcbc" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 02 42 AM" src="https://github.com/user-attachments/assets/289bedf8-c28c-44e3-b3df-82da03da4e94" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 02 53 AM" src="https://github.com/user-attachments/assets/464e4d47-ea0a-494b-a019-66c1493acfaf" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 01 31 AM" src="https://github.com/user-attachments/assets/7062e1c2-ad80-4b2a-a26f-b3d5207f259f" />

---
- **ADMIN**

![Screenshot 2025-06-12 at 5 03 07 AM](https://github.com/user-attachments/assets/eb78eb39-63a1-4e51-a104-18df1435336a)

<img width="1470" alt="Screenshot 2025-06-12 at 5 04 12 AM" src="https://github.com/user-attachments/assets/ada3ae52-9f34-45aa-8d9e-813d0c9661fb" />

![Screenshot 2025-06-12 at 5 04 21 AM](https://github.com/user-attachments/assets/3b4d64a1-8dbf-42a9-be31-19a194cb2d8c)

<img width="1470" alt="Screenshot 2025-06-12 at 5 04 29 AM" src="https://github.com/user-attachments/assets/3b71302f-047e-4e4b-80c3-a689db67f545" />

<img width="1470" alt="Screenshot 2025-06-12 at 5 04 38 AM" src="https://github.com/user-attachments/assets/71d69975-cfc1-4f3e-a0f7-b124e19171d3" />


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
## 📝 License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
