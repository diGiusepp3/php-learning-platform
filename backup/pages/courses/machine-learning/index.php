<?php
$pagetitle = "Machine Learning Course";
$courseName = "Machine Learning";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#machine-learning-basics'>Machine Learning Basics</a></li>
                <li><a href='#supervised-learning'>Supervised Learning</a></li>
                <li><a href='#unsupervised-learning'>Unsupervised Learning</a></li>
                <li><a href='#model-evaluation'>Model Evaluation</a></li>
                <li><a href='#deep-learning'>Deep Learning</a></li>
                <li><a href='#applications'>Applications of Machine Learning</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>Machine Learning Course</h1>
            <p>Delve into the world of Machine Learning and uncover how algorithms can learn from and make predictions based on data.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to Machine Learning</h2>
        <p>Machine Learning (ML) is a branch of artificial intelligence that focuses on the development of algorithms that allow computers to learn from and make predictions or decisions based on data. This course will introduce you to the fundamental concepts, techniques, and applications of machine learning.</p>
    </div>
</section>

<section id="machine-learning-basics">
    <div class="container">
        <h2>Machine Learning Basics</h2>
        <p>Machine Learning involves training algorithms to recognize patterns and make predictions. Here are some core concepts:</p>
        <h3>Core Concepts</h3>
        <ul>
            <li><strong>Algorithms:</strong> Procedures or formulas for solving problems. Examples include linear regression, decision trees, and neural networks.</li>
            <li><strong>Features:</strong> Input variables or attributes used by the algorithm to make predictions.</li>
            <li><strong>Labels:</strong> The output or target variable that the algorithm is trying to predict.</li>
            <li><strong>Training Data:</strong> Data used to train the model, including features and labels.</li>
            <li><strong>Testing Data:</strong> Data used to evaluate the model's performance.</li>
        </ul>
        <p>Example of a Simple Linear Regression in Python:</p>
        <pre><code>import numpy as np
from sklearn.linear_model import LinearRegression

# Sample data
X = np.array([[1], [2], [3], [4], [5]])
y = np.array([1, 4, 9, 16, 25])

# Create and train the model
model = LinearRegression()
model.fit(X, y)

# Predict
predictions = model.predict(np.array([[6]]))
print(predictions)
</code></pre>
    </div>
</section>

<section id="supervised-learning">
    <div class="container">
        <h2>Supervised Learning</h2>
        <p>Supervised learning involves training a model on labeled data, where the input data and the corresponding correct output are provided.</p>
        <h3>Types of Supervised Learning</h3>
        <ul>
            <li><strong>Classification:</strong> Predicts a categorical label. Example: Spam detection in emails.</li>
            <li><strong>Regression:</strong> Predicts a continuous value. Example: Predicting house prices based on features like size and location.</li>
        </ul>
        <p>Example of Classification (Iris Dataset):</p>
        <pre><code>from sklearn.datasets import load_iris
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score

# Load dataset
iris = load_iris()
X = iris.data
y = iris.target

# Split data
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Train model
model = GaussianNB()
model.fit(X_train, y_train)

# Predict and evaluate
predictions = model.predict(X_test)
accuracy = accuracy_score(y_test, predictions)
print(f'Accuracy: {accuracy}')
</code></pre>
    </div>
</section>

<section id="unsupervised-learning">
    <div class="container">
        <h2>Unsupervised Learning</h2>
        <p>Unsupervised learning deals with data that has no labels and aims to find hidden patterns or intrinsic structures.</p>
        <h3>Types of Unsupervised Learning</h3>
        <ul>
            <li><strong>Clustering:</strong> Groups similar data points together. Example: Customer segmentation.</li>
            <li><strong>Dimensionality Reduction:</strong> Reduces the number of features while preserving important information. Example: Principal Component Analysis (PCA).</li>
        </ul>
        <p>Example of Clustering (K-Means):</p>
        <pre><code>from sklearn.datasets import load_iris
from sklearn.cluster import KMeans
import matplotlib.pyplot as plt

# Load dataset
iris = load_iris()
X = iris.data

# Apply KMeans clustering
kmeans = KMeans(n_clusters=3, random_state=42)
kmeans.fit(X)
labels = kmeans.labels_

# Plot results
plt.scatter(X[:, 0], X[:, 1], c=labels, cmap='viridis')
plt.xlabel('Feature 1')
plt.ylabel('Feature 2')
plt.title('K-Means Clustering')
plt.show()
</code></pre>
    </div>
</section>

<section id="model-evaluation">
    <div class="container">
        <h2>Model Evaluation</h2>
        <p>Evaluating a machine learning model involves assessing its performance using various metrics and techniques to ensure its effectiveness.</p>
        <h3>Evaluation Metrics</h3>
        <ul>
            <li><strong>Accuracy:</strong> The proportion of correctly classified instances out of the total instances.</li>
            <li><strong>Precision:</strong> The ratio of correctly predicted positive observations to the total predicted positives.</li>
            <li><strong>Recall:</strong> The ratio of correctly predicted positive observations to all observations in the actual class.</li>
            <li><strong>F1 Score:</strong> The weighted average of Precision and Recall.</li>
        </ul>
        <p>Example of Evaluation Metrics (Classification Report):</p>
        <pre><code>from sklearn.metrics import classification_report

# Assuming predictions and y_test are available
print(classification_report(y_test, predictions))
</code></pre>
    </div>
</section>

<section id="deep-learning">
    <div class="container">
        <h2>Deep Learning</h2>
        <p>Deep Learning is a subset of machine learning that uses neural networks with many layers (deep networks) to model complex patterns and relationships in data.</p>
        <h3>Key Concepts</h3>
        <ul>
            <li><strong>Neural Networks:</strong> Computational models inspired by the human brain, consisting of interconnected nodes (neurons) organized in layers.</li>
            <li><strong>Convolutional Neural Networks (CNNs):</strong> Specialized for processing grid-like data, such as images.</li>
            <li><strong>Recurrent Neural Networks (RNNs):</strong> Designed for sequential data, such as time series or text.</li>
        </ul>
        <p>Example of a Simple Neural Network (Keras):</p>
        <pre><code>from keras.models import Sequential
from keras.layers import Dense
import numpy as np

# Generate dummy data
X = np.random.rand(100, 10)
y = np.random.randint(2, size=100)

# Build model
model = Sequential()
model.add(Dense(64, input_dim=10, activation='relu'))
model.add(Dense(1, activation='sigmoid'))

# Compile model
model.compile(loss='binary_crossentropy', optimizer='adam', metrics=['accuracy'])

# Train model
model.fit(X, y, epochs=10, batch_size=10)
</code></pre>
    </div>
</section>

<section id="applications">
    <div class="container">
        <h2>Applications of Machine Learning</h2>
        <p>Machine Learning is applied in various domains to solve real-world problems and provide valuable insights.</p>
        <h3>Common Applications</h3>
        <ul>
            <li><strong>Recommendation Systems:</strong> Personalized content and product recommendations. Example: Netflix and Amazon.</li>
            <li><strong>Natural Language Processing (NLP):</strong> Analyzing and understanding human language. Example: Chatbots and language translation.</li>
            <li><strong>Image and Speech Recognition:</strong> Identifying objects in images or transcribing spoken words. Example: Facial recognition and voice assistants.</li>
            <li><strong>Predictive Analytics:</strong> Forecasting future trends based on historical data. Example: Financial forecasting and demand prediction.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Continue learning about Machine Learning with these additional resources:</p>
        <ul>
            <li><a href="https://www.coursera.org/learn/machine-learning" target="_blank">Coursera Machine Learning Course by Andrew Ng</a></li>
            <li><a href="https://www.kaggle.com/" target="_blank">Kaggle</a></li>
            <li><a href="https://www.fast.ai/" target="_blank">Fast.ai</a></li>
            <li><a href="https://www.tensorflow.org/" target="_blank">TensorFlow</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
