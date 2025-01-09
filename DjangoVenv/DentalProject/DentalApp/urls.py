from django.urls import path
from . import views

urlpatterns = [
    path('DentalApp/', views.Doctor, name='DentalApp'),
    path('DentalApp/', views.Member, name='DentalApp'),
]