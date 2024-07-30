## Overview

This project implements a simple restaurant order system. The main topics covered in this implementation are:
- Practice of PHP syntax
- Implementation of the four pillars of object-oriented programming: encapsulation, abstraction, inheritance, and polymorphism

The theme of the project is food, and it includes modeling classes such as `FoodItems`, `Restaurant`, and `Person`, which represents people like `Customer` and `Employee`.

### FoodItem
`FoodItem` is an abstract class that encapsulates the basic information for each food item, such as name, description, and price. Concrete classes extending `FoodItem` represent specific food categories like burgers, pizzas, and pastas. Each `FoodItem` has an internal constant class variable (not an instance variable) representing its category, which can be accessed directly via class static methods (e.g., `Pizza::getCategory()`) or constant class variables (e.g., `Pizza::CATEGORY`) without creating an instance. Examples of `FoodItem` include `HawaiianPizza`, `Fettuccine`, and `CheeseBurger`.

### Person
The `Person` class represents a general person. It encapsulates common attributes for all people interacting within the model, such as name, age, and address. Specific classes extending `Person`, such as `Customer` and `Employee`, inherit these shared attributes and implement their own unique properties and behaviors.

### Restaurant
The `Restaurant` class is a concrete class that encapsulates all restaurant operations. It holds a list of `FoodItem` objects representing the menu and a list of `Employee` objects representing the restaurant staff.

A cashier `Employee` generates a `FoodOrder` and delegates the order, which includes a list of `FoodItems`, to a chef `Employee`. Additionally, the cashier generates an `Invoice` which is the return value of the `order()` function. The `Invoice` object includes the final price and order time.
