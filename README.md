Task 2: Estimate XXXX

Create a card endpoint.
Create an endpoint that enables the user to create any type of card from the list below.

----------
Classification

Entity: Card.
Types: Monster, Spell, Trap.

Monster
- (string)      name [unique]
- (string|null) effect
- (int)         attack_points
- (int)         defense_points
- (string)      color - the same for all monster cards [constant]

Spell
- (string)      name [unqiue]
- (string)      effect [unique]
- (string)      color - the same for all spell cards [constant]

Trap
- (string)      name [unique]
- (string)      effect [unique]
- (string)      color - the same for all trap cards [constant]
- (string)      trigger [unique]

----------
Details:

A monster card can have an effect but there should also be an option to add a plain monster card that does not have an effect.

A monster card should have attack points, defense points and a name that are different for each monster card.
All monster cards should have the same color.

A spell card should have a name and effect that are different for each spell card.
All spell cards should have the same color.

A trap card should have a name, effect and a trigger that are different for each trap card.
All trap cards should have the same color.

----

Please use Laravel or Symfony.

Try to spend at most 12 hours on the task - if you think you can't manage, feel free to take a shortcut, but describe what it was and why did you take it. Also, let us know what else you could do, if you had more time.


Let us know, if there is anything which is not clear.
