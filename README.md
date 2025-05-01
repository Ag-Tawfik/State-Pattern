# State Pattern Implementation - Event Registration System

This project demonstrates the implementation of the State Design Pattern in PHP through an event registration system. It showcases how to handle complex state transitions while maintaining clean and maintainable code.

## Requirements

- PHP 8.3 or higher
- Composer (for dependency management)

## Overview

The State Pattern allows an object to alter its behavior when its internal state changes. In this implementation, we model an event registration system that handles both physical and online events with different workflows.

## Features

- Implementation of the State Design Pattern
- Support for both physical and online events
- Administrative approval workflow
- State transition logging
- Comprehensive test coverage

## State Flow

### Physical Events
1. Applied State
2. Fill Form State
3. Admin Acceptance/Rejection State
4. Paid State
5. Done State

### Online Events
1. Applied State
2. Paid State
3. Fill Form State
4. Done State

## Project Structure

```
├── Behavioral/
│   └── Event/
│       ├── AdminAcceptedState.php
│       ├── AppliedState.php
│       ├── DoneState.php
│       ├── EventContext.php
│       ├── FillFormState.php
│       ├── PaidState.php
│       ├── RejectedState.php
│       ├── State.php
│       ├── StateEnum.php
│       └── User.php
├── Tests/
│   └── StateEventTest.php
├── composer.json
├── phpunit.xml.dist
└── README.md
```

## Installation

1. Clone the repository:
```bash
git clone https://github.com/Ag-Tawfik/State-Pattern.git
```

2. Install dependencies:
```bash
composer install
```

## Running Tests

Execute the test suite using PHPUnit:
```bash
composer test
```

## Usage Example

```php
// Create a user for a physical event with admin approval
$user = new User('John Doe', true, true);
$event = new EventContext($user);

// Progress through the states
$event->eventProceed(); // APPLIED
$event->eventProceed(); // FILLFORM
$event->eventProceed(); // ADMINACCEPTED
$event->eventProceed(); // PAID
// Final state: DONE

// Create a user for an online event
$user = new User('Jane Doe', false, false);
$event = new EventContext($user);

// Progress through the states
$event->eventProceed(); // APPLIED
$event->eventProceed(); // PAID
$event->eventProceed(); // FILLFORM
// Final state: DONE
```

## Design Pattern Details

The State Pattern is implemented using the following key components:

- `State`: Abstract base class defining the interface for all concrete states
- `EventContext`: Maintains the current state and delegates state-specific behavior
- Concrete States: Individual classes for each state implementing specific behaviors
- `StateEnum`: Enumeration of all possible states

## License

This project is licensed under the MIT License - see the LICENSE file for details. 
