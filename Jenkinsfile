pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/lazantha/IMS-Project.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build('laravel_app')
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    docker.image('laravel_app').run('-p 9000:9000')
                }
            }
        }
    }
}
