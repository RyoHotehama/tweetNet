const ErrorPage = () => {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-100">
      <div className="max-w-md p-8 bg-white shadow-lg rounded-lg">
        <h1 className="text-3xl font-bold mb-4">存在しないページにアクセスしました。</h1>
        <p className="text-gray-600 mb-8">アクセスしたページは存在しません。お手数ですがURLを再度確認してみてください。</p>
        <button className="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" onClick={() => history.back()}>
          戻る
        </button>
      </div>
    </div>
  );
};

export default ErrorPage;