from .views import BlogView, BlogDetail
from django.urls import path

urlpatterns = [
    path('', BlogView.as_view(), name='home'),
    path('post/<int:pk>', BlogDetail, name='detail')
]
