from django.contrib import admin
from django.urls import include, path
from .import views

urlpatterns = [
    path('', views.home, name = 'home'),
    path('doctor/', views.doctor, name = 'doctor'),
    path('account/', views.account, name = 'account'),
    path('login/', views.login, name = 'login')
]