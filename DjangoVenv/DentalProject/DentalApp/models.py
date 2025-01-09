from django.db import models

class Member(models.Model):
    firstname = models.CharField(max_length=255)
    lastname = models.CharField(max_length=255)
    birthday = models.DateField()
    gender = models.BooleanField()  # Use `True` for male, `False` for female, or add choices for clarity.

    def __str__(self):
        return f"{self.firstname} {self.lastname}"


class Doctor(models.Model):
    fullname = models.CharField(max_length=255)
    experience_years = models.IntegerField()  # Renamed to follow snake_case convention.
    gender = models.BooleanField()  # Same recommendation as above.

    def __str__(self):
        return self.fullname

class Service(models.Model):
    name = models.CharField(max_length=255)
    price = models.IntegerField()  # Renamed to follow snake_case convention.
    status = models.BooleanField()  # Same recommendation as above.
    description = models.CharField(max_length=255)
    

    def __str__(self):
        return self.name