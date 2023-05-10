import pandas as pd
import re
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.sentiment import SentimentIntensityAnalyzer
from wordcloud import WordCloud
import matplotlib.pyplot as plt
import nltk

# Download the VADER lexicon
nltk.download('vader_lexicon')

# Read the dataset
df = pd.read_csv("movie_review.csv")

# Preprocessing
stop_words = set(stopwords.words('english'))
df['text'] = df['text'].apply(lambda x: " ".join(word.lower() for word in word_tokenize(x) if word.lower() not in stop_words))
df['text'] = df['text'].apply(lambda x: re.sub('[^\w\s]', '', x))

# Sentiment analysis using VADER
sia = SentimentIntensityAnalyzer()
df['sentiment'] = df['text'].apply(lambda x: sia.polarity_scores(x)['compound'])
print(df[['text', 'sentiment']])

# Create a WordCloud object
wordcloud = WordCloud(width=800, height=800, background_color='white', min_font_size=10).generate(' '.join(df['text']))

# Plot the WordCloud image
plt.figure(figsize=(8,8), facecolor=None)
plt.imshow(wordcloud)
plt.axis("off")
plt.tight_layout(pad=0)
plt.show()
