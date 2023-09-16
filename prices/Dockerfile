FROM python

WORKDIR /app

COPY requirements.txt requirements.txt

ENV POSTGRES_HOST_AUTH_METHOD=trust


RUN pip install -r requirements.txt

COPY . . 

EXPOSE 80

CMD ["python","app.py"]