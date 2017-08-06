Breaking Encapsulation with traits in PHP
=========================================

Traits in PHP are dangerous because they allow the accidental breaking of encapsulation, for no real gain. In this
example you can see an example of traits vs an invokable class, you could use any `callable` type here for the same
effect. You can avoid this by being careful and not setting any member variables in traits, but everyone makes mistakes,
so why risk it, when the encapsulation comes for free with `callable` types?

Run it using

```
composer run
```

It requires PHP 7.1 or greater.
