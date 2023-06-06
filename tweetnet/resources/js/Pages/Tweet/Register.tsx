import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";
import { FormEventHandler } from "react";

export default function TweetRegister() {
  const { data, setData, post, processing, errors } = useForm({
    comment: ''
  });
  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    post(route('tweet.register'));
  };
  return (
    <>
      <div className="max-w-lg mx-auto p-4">
        <form onSubmit={submit} className="bg-white rounded-lg shadow-md p-4">
          <div className="mb-4">
            <label htmlFor="message" className="text-gray-700 font-medium">メッセージ:</label>
            <InputError message={errors.comment} className="mb-2" />
            <textarea
              id="comment"
              name="comment"
              value={data.comment}
              rows={4}
              className="w-full border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
              onChange={(e) => setData('comment', e.target.value)}
            ></textarea>
          </div>
          <div className="flex justify-end">
            <PrimaryButton className="ml-4" disabled={processing}>
              投稿
            </PrimaryButton>
          </div>
        </form>
      </div>
    </>
  );
}